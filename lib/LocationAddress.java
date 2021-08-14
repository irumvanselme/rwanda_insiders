package com.mopay.bankapi.domain;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.EnumType;
import javax.persistence.Enumerated;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

import com.mopay.bankapi.enums.ELocationType;

@Entity
@Table(name="location_address")
public class LocationAddress {

	@Id
	@Column(name="location_id")
	@GeneratedValue(strategy = GenerationType.IDENTITY)
	private Long id;
	
	@Enumerated(EnumType.STRING)
	private ELocationType locationType;
	
	@Column(name="name")
	private String name;
	
	private String nameFrench;
	
	private String nameKiny;
	
	@ManyToOne
	private LocationAddress parentId;
	
	public Long getId() {
		return id;
	}

	public void setId(Long id) {
		this.id = id;
	}

	public ELocationType getLocationType() {
		return locationType;
	}

	public void setLocationType(ELocationType locationType) {
		this.locationType = locationType;
	}

	public LocationAddress getParentId() {
		return parentId;
	}

	public void setParentId(LocationAddress parentId) {
		this.parentId = parentId;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public String getNameFrench() {
		return nameFrench;
	}

	public void setNameFrench(String nameFrench) {
		this.nameFrench = nameFrench;
	}

	public String getNameKiny() {
		return nameKiny;
	}

	public void setNameKiny(String nameKiny) {
		this.nameKiny = nameKiny;
	}
	
}
